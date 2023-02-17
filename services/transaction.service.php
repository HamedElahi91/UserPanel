<?php
class TransactionServices{
      private $db;
      private $table;
      public function __construct()
      {
            global $wpdb;
            $this->db = $wpdb;
            $this->table = $this->db->prefix.'up_transactions';
      }

      public function all($user_id){
            $transactions = $this->db->get_results("SELECT * FROM {$this->table} WHERE user_id={$user_id} ORDER BY created_at DESC");
            return $transactions;
      }

      public function create($params){
            $this->db->insert($this->table,$params);
            return $this->db->insert_id;
      }

      public function update_transaction($params, $where){
            return $this->db->update($this->table, $params, $where);
      }

      public function generate_res_num($user_id){
            return intval(microtime(true)).$user_id;
      }
}