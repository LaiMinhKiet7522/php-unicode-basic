<?php
function query($sql, $data = [])
{
    global $conn;
    $query = false;
    try {
        $statement = $conn->prepare($sql);
        if (empty($data)) {
            $query = $statement->execute();
        } else {
            $query = $statement->execute($data);
        }
    } catch (Exception $e) {
        echo $e->getMessage() . '<br/>';
        echo 'File: ' . $e->getFile() . ' - Line: ' . $e->getLine();
        echo '<br/>';
    }
    return $query;
}
function insert($table, $dataInsert)
{
    $keyArr = array_keys($dataInsert);
    $fieldStr = implode(', ', $keyArr);
    $valueStr = ':' . implode(', :', $keyArr);

    $sql = 'INSERT INTO ' . $table . '(' . $fieldStr . ') VALUES(' . $valueStr . ')';
    return query($sql, $dataInsert);
}
function update($table, $dataUpdate, $condition = '')
{
    $updateStr = '';
    foreach ($dataUpdate as $key => $value) {
        $updateStr .= $key . '=:' . $key . ', ';
    }
    $updateStr = rtrim($updateStr, ', ');
    if (!empty($condition)) {
        $sql = 'UPDATE ' . $table . ' SET ' . $updateStr . ' WHERE ' . $condition;
    } else {
        $sql = 'UPDATE ' . $table . ' SET ' . $updateStr;
    }
    return query($sql, $dataUpdate);
}
function delete($table, $condition)
{
    if (!empty($condition)) {
        $sql = "DELETE FROM $table WHERE $condition";
    } else {
        $sql = "DELETE FROM $table";
    }
    return query($sql);
}
