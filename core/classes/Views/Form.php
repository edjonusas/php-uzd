<?php

namespace Core\Views;

class Form extends \Core\Abstracts\Views\Form
{

    public function render(string $template_path = ROOT . '/core/templates/form.tpl.php')
    {
        return parent::render($template_path);
    }

    /**
     * Checks if the form is submitted
     *
     * Gets submit action from $_POST, and checks if form array
     * has a button with such index
     *
     * @return bool
     */
    public function isSubmitted(): bool
    {
        return array_key_exists(self::getSubmitAction(), $this->data['buttons']);
    }

    /**
     * Determines which button was pressed by reading "action"
     * index in $_POST.
     * If $_POST is empty, or doesnt contain action, returns null
     *
     * @return string|null
     */
    static function getSubmitAction(): ?string
    {
        return $_POST['action'] ?? null;
    }

    /**
     * Validates form based on $this->data
     * Does NOT call any callbacks, just returns the result
     * of the form
     *
     * Does not call function validate_form !!!,
     * implements all functionality inside
     *
     * @return bool
     */
    public function validate(): bool
    {
        $success = true;
        // input validator
        foreach ($this->data['fields'] as $key => &$field) {
            // go through validators array
            foreach ($field['validators'] ?? [] as $validator_key => $validator) {
                //check if validator is array
                if (is_array($validator)) {
                    $function = $validator_key;
                    $params = $validator;
                } else {
                    $function = $validator;
                }

                if ($function($this->getSubmitData()[$key], $field, $params ?? null)) {
                    $field['value'] = $this->getSubmitData()[$key];
                } else {
                    $success = false;
                    break;
                }
            }
        }
        //form validator
        foreach ($this->data['validators'] ?? [] as $form_validator_key => $form_validator) {
            if (is_array($form_validator)) {
                $form_validator_function = $form_validator_key;
                $form_validator_params = $form_validator;
            } else {
                $form_validator_function = $form_validator;
            }
            if (!$form_validator_function($this->getSubmitData(), $this->data, $form_validator_params ?? null)) {
                $success = false;
                break;
            }
        }

        return $success;
    }

    /**
     * Gets form submitted data
     * If $filtered = false, returns $_POST if not empty (or null)
     * If $filtered = true, returns filtered $_POST array
     * based on form array: $this->data
     *
     * DO NOT CALL any functions, it has to be full-code
     *
     * @param bool $filter
     * @return array|null
     */
    public function getSubmitData($filter = true): ?array
    {
        if ($filter) {
            $filter_parameters = [];
            foreach ($this->data['fields'] as $key => $field) {
                $filter_parameters[$key] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
            }

            return filter_input_array(INPUT_POST, $filter_parameters);
        }

        return $_POST;
    }
}