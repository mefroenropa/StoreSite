@extends('admin.layouts.master')

@section('head-tag')
    <title>محصولات</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
     

      <table>
        <?php ?>
        <?php ?>
        <tr>
        <?php foreach($product->attr['key'] as $attribute){  ?>
          <th><?= $attribute ?></th>
        
          <?php } ?>
        </tr>
    
        <tr>
        <?php foreach($product->attr['value'] as $attribute){  ?>
                <td><?= $attribute ?></td>
            
                <?php } ?>
            </tr>
    
            
      </table>
    
    
   
    
    <h2>HTML Table</h2>
    
    <table>
      <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
      </tr>
      <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
      </tr>
      <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
      </tr>
      <tr>
        <td>Magazzini Alimentari Riuniti</td>
        <td>Giovanni Rovelli</td>
        <td>Italy</td>
      </tr>
    </table>
    
    
@endsection