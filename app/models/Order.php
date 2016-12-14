<?php

class Order extends Eloquent{

	protected $fillable = array('book_issue_id', 'student_id', 'created_at', 'updated_at');

    public $timestamps = true;

	protected $table = 'orders';
	protected $primaryKey = 'id';

	protected $hidden = array();

}
