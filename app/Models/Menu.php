<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $fillable=['namaMenu','kategori_id','hargaMenu','gambarMenu'];

    public function kategoriMenu(): BelongsTo
    {
        return $this->belongsTo(KategoriMenu::class);
    }
}
