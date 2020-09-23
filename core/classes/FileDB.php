<?php

namespace Core;

class FileDB
{
    private string $file_name;
    private array $data;

    public function __construct(string $file_name)
    {
        $this->file_name = $file_name;
        $this->data = [];
    }

    /**
     * Returns temporary data
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Sets temporary (this data) data to passed array
     *
     * @param array $data_array
     */
    public function setData(array $data_array)
    {
        $this->data = $data_array;
    }

    /**
     * Saves temporary data array to file as json-encoded string
     *
     * @return bool
     */
    public function save(): bool
    {
        $string = json_encode($this->data);
        return file_put_contents($this->file_name, $string) !== false;
    }

    /**
     * Sets temporary data to decoded json file
     */
    public function load()
    {
        if (file_exists($this->file_name)) {
            $data = file_get_contents($this->file_name);
            $decoded = json_decode($data, true) ?? [];
            $this->data = $decoded;
        } else {
            $this->data = [];
        }
    }

    /**
     * Creates empty array in data on index table name
     *
     * @param string $table_name
     * @return bool
     */
    public function createTable(string $table_name): bool
    {
        if (!$this->tableExists($table_name)) {
            $this->data[$table_name] = [];
            return true;
        }

        return false;
    }

    /**
     * Checking if table name exists in data array
     *
     * @param string $table_name
     * @return bool
     */
    public function tableExists(string $table_name): bool
    {
        return isset($this->data[$table_name]);
    }

    /**
     * Delete table name
     *
     * @param string $table_name
     * @return bool
     */
    public function dropTable(string $table_name): bool
    {
        if ($this->tableExists($table_name)) {
            unset($this->data[$table_name]);
            return true;
        }

        return false;
    }

    /**
     *Empty the table
     *
     * @param string $table_name
     * @return bool
     */
    public function truncateTable(string $table_name): bool
    {
        if ($this->tableExists($table_name)) {
            $this->data[$table_name] = [];
            return true;
        }

        return false;
    }

    /**
     * inserts row in data array table
     *
     * @param string $table_name
     * @param array $row
     * @param string|null $row_id
     * @@return bool|string
     */
    public function insertRow(string $table_name, array $row, $row_id = null)
    {
        // auto index
        if ($row_id === null) {
            $this->data[$table_name][] = $row;
            return array_key_last($this->data[$table_name]);
        } //index written $row_id
        else {
            if (!$this->rowExists($table_name, $row_id)) {
                $this->data[$table_name][$row_id] = $row;
                return array_key_last($this->data[$table_name]);
            }
        }

        return false;
    }

    /**
     * Checking if table row exists in data array
     *
     * @param string $table_name
     * @param string $row_id
     * @return bool
     */
    public function rowExists(string $table_name, $row_id): bool
    {
        return isset($this->data[$table_name][$row_id]);
    }

    /**
     * update row in $data array if exists
     *
     * @param string $table_name
     * @param string $row_id
     * @param array $row
     * @return bool
     */
    public function updateRow(string $table_name, $row_id, array $row): bool
    {
        if ($this->rowExists($table_name, $row_id)) {
            $this->data[$table_name][$row_id] = $row;
            return true;
        }

        return false;
    }

    /**
     * delete row in $data array if exists
     *
     * @param string $table_name
     * @param string $row_id
     * @return bool
     */
    public function deleteRow(string $table_name, $row_id): bool
    {
        if ($this->rowExists($table_name, $row_id)) {
            unset($this->data[$table_name][$row_id]);
            return true;
        }

        return false;
    }

    /**
     * get row by id from $data
     *
     * @param string $table_name
     * @param $row_id
     * @return array|false
     */
    public function getRowById(string $table_name, $row_id)
    {
        if ($this->rowExists($table_name, $row_id)) {
            return $this->data[$table_name][$row_id];
        }

        return false;
    }

    /**
     * get row by condition array from $data
     *
     * @param string $table_name
     * @param array $conditions
     * @return array
     */
    public function getRowsWhere(string $table_name, array $conditions): array
    {
        $results = [];
        if ($this->tableExists($table_name)) {
            foreach ($this->data[$table_name] as $row_key => $row) {
                $success = true;
                foreach ($conditions as $condition_key => $condition) {
                    if ($row[$condition_key] !== $condition) {
                        $success = false;
                        break;
                    }
                }
                if ($success) $results[$row_key] = $row;
            }
        }

        return $results;
    }

    public function getRowWhere(string $table_name, array $conditions): ?array
    {
        if ($this->tableExists($table_name)) {
            foreach ($this->data[$table_name] as $row_key => $row) {
                $success = true;
                foreach ($conditions as $condition_key => $condition) {
                    if ($row[$condition_key] !== $condition) {

                        $success = false;
                        break;
                    }
                }
                if ($success) return $row;
            }
        }
        return null;
    }
}