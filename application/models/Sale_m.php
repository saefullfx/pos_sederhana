<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale_m extends CI_Model {

    public function invoice_no()
    {
        $sql = "SELECT MAX(MID(invoice,9,4)) AS invoice_no 
                FROM t_sale 
                WHERE MID(invoice,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->invoice_no) + 1;
            $no = sprintf("%'.04d", $n);
        }else{
            $no = "0001";
        }
        $invoice = "MP".date('ymd').$no;
        return $invoice;
    }

    public function get_sale($id = null) 
    {
        $this->db->select('*, customer.name as customer_name, user.username as user_name, t_sale.created as sale_created');
        $this->db->from('t_sale');
        $this->db->join('customer', 't_sale.customer_id = customer.customer_id', 'left');
        $this->db->join('user', 't_sale.user_id = user.user_id', 'left');
        if ($id != null) {
            $this->db->where('sale_id', $id);
        }
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        return $query;
    }

    public function get_sale_detail($sale_id = null)
    {
        $this->db->from('t_sale_detail');
        $this->db->join('p_item', 't_sale_detail.item_id = p_item.item_id');
        if ($sale_id != null) {
            # code...
            $this->db->where('t_sale_detail.sale_id = p_item.item_id');
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_sale_pagination($limit = null, $start = null) 
    {
        $this->db->select('*, customer.name as customer_name, user.username as user_name, t_sale.created as sale_created');
        $this->db->from('t_sale');
        $this->db->join('customer', 't_sale.customer_id = customer.customer_id', 'left');
        $this->db->join('user', 't_sale.user_id = user.user_id', 'left');
        $this->db->order_by('date', 'desc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

}