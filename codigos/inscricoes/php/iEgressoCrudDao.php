<?php
interface iEgressoCrudDao {
    public function create($object);
    public function read($param);
    public function update($object);
    public function delete($param);
}
?>