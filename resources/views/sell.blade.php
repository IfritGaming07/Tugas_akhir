@extends('layouts.main')

@section('container')

    <div>
        <div>
            <label for="">
                nama
            </label><br>
            <input type="text" class="form-control">
        </div>
        <div>
            <label for="">
                Rincian
            </label><br>
            <Textarea class="md-textarea form-control"></Textarea>
        </div>
        <div>
            <label for="">
                Harga
            </label><br>
            <input type="text" class="form-control">
        </div><br>
        <div >
            <label for="">Gambar Produk</label>
            <input type="file" class="file form-control">
        </div><br>
        <button type="submit" class="btn btn-success">Selesai</button>
    </div>

    <!-- <tr>
        <table>
            <tr>
                <td>Foto Barang</td>
                <td>
                    <button><input type="file" name="" id=""></button>
                </td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Rincian</td>
                <td><input type="text" name="" id=""></td>
            </tr>
        </table>
        <button type="submit"><a href="/sell" >Selesai</a></button>
    </tr> -->
@endsection