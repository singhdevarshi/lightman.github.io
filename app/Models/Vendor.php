<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'tbl_vendor_detail';
    protected $fillable = [
        'gender', 'profile_image', 'id_proof_type',
     'id_proof_no', 'id_proof_image', 'vendor_type', 'verification_status',
      'available_status', 'status'
    ];
}
