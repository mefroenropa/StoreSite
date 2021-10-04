<?php

function currentUserId(){
    return \System\Auth\Auth::user()->id;
}

function haveParent($category){
    return $category->parent_id == 0 ? "ندارد" : $category->parent()->name;
}

function errorClass($name)
{
    return errorExists($name) ? 'is-invalid' : '';
}

function errorText($name)
{
    return errorExists($name) ? '<div><small class="text-danger">' . error($name) . '</small></div>' : '';
}

function oldOrValue($name, $value)
{
    return empty(old($name)) ? $value : old($name);
}


function fullUsername(object $user)
{
    return $user->first_name . " " . $user->last_name;
}


function paginate($data, $perPage)
{
    $totalRows = count($data);
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $totalPages = ceil($totalRows / $perPage);
    $currentPage = min($currentPage, $totalPages);
    $currentPage = max($currentPage, 1);
    $currentRow = ($currentPage - 1) * $perPage;
    $data = array_slice($data, $currentRow, $perPage);
    return $data;
}

function paginateView($data, $perPage)
{
    $totalRows = count($data);
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $totalPages = ceil($totalRows / $perPage);
    $currentPage = min($currentPage, $totalPages);
    $currentPage = max($currentPage, 1);
    $paginateView = '';
    $paginateView .= ($currentPage != 1) ? '<li><a href="'.paginateUrl(1).'">&lt;</a></li>' : '';
    $paginateView .= (($currentPage - 2) >= 1) ? '<li><a href="'.paginateUrl($currentPage - 2).'">' . ($currentPage - 2) . '</a></li>' : '';
    $paginateView .= (($currentPage - 1) >= 1) ? '<li><a href="'.paginateUrl($currentPage - 1).'">' . ($currentPage - 1) . '</a></li>' : '';
    $paginateView .=  '<li class="active"><span>' . ($currentPage) . '</span></li>';
    $paginateView .= (($currentPage + 1) <= $totalPages) ? '<li><a href="'.paginateUrl($currentPage + 1).'">' . ($currentPage + 1) . '</a></li>' : '';
    $paginateView .= (($currentPage + 2) <= $totalPages) ? '<li><ahref="'.paginateUrl($currentPage + 2).'">' . ($currentPage + 1) . '</a></li>' : '';
    $paginateView .= ($currentPage != $totalPages) ? '<li><a  href="'.paginateUrl($totalPages).'">&gt;</a></li>' : '';

    return '   <div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                ' . $paginateView . '
            </ul>
        </div>
    </div>
</div>';
}

function paginateUrl($page){

    $urlArray = explode('?', currentUrl());
    if(isset($urlArray[1])){
        $_GET['page'] = $page;
        $getVariables = array_map(function($value, $key){return $key . "=" . $value;}, $_GET, array_keys($_GET));
        return $urlArray[0] . "?" . implode("&", $getVariables);
    }else{
        return currentUrl() . "?page=".$page;
    }
    
}

function getCaller($name, $value){

    $urlArray = explode('?', currentUrl());
    if(isset($urlArray[1])){
        $_GET[$name] = $value;
        $getVariables = array_map(function($value, $key){return $key . "=" . $value;}, $_GET, array_keys($_GET));
        return $urlArray[0] . "?" . implode("&", $getVariables);
    }else{
        return currentUrl() . "?".$name."=".$value;
    }
    
}

function putStars($number){
    $starHtml = '';
    
    for($i = 0; $i < ceil($number); $i++){
        $starHtml .= '<i class="fa fa-star"></i>';
    }
    for($j = ceil($number); $j < 5; $j++ ){
        $starHtml .= '<i class="fa fa-star-o"></i>';
    }

    return $starHtml;
}



function discountPercent($amount, $discount){
    $percent = round((int)($amount * 100) / $discount, 0);
    
    return 100 - $percent;
}
