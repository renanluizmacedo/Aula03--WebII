<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno', function () {
    
    $array = (
            [
                ["nome" => "Miguel"],
                ["nome" => "Davi"],
                ["nome" => "Arthur"],
                ["nome" => "Julia"],
                ["nome" => "Isabella"],
                ["nome" => "Gabriel"],
                ["nome" => "Valentina"],
                ["nome" => "Heitor"],
                ["nome" => "Beatriz"],
                ["nome" => "Gustavo"],
                ["nome" => "Felipe"],
                ["nome" => "Vitor"],
                ["nome" => "Pietro"],
                ["nome" => "Benjamin"],
                ["nome" => "Bryan"],
                ["nome" => "Emanuelly"],
                ["nome" => "Cecília"],
                ["nome" => "Rebeca"],
                ["nome" => "Isaac"],
                ["nome" => "Eduardo"], 
            ]
    );
    $alunos = "<ul>";

    for($a=0; $a<count($array); $a++) {
        $alunos = $alunos."<li>".$array[$a]['nome']."</li>";
    }
    

    $alunos = $alunos."</ul>";     
    return $alunos;
});
Route::get('/aluno/limite/{total}', function ($total) {
    
        $array = (
                [
                    ["nome" => "Miguel"],
                    ["nome" => "Davi"],
                    ["nome" => "Arthur"],
                    ["nome" => "Julia"],
                    ["nome" => "Isabella"],
                    ["nome" => "Gabriel"],
                    ["nome" => "Valentina"],
                    ["nome" => "Heitor"],
                    ["nome" => "Beatriz"],
                    ["nome" => "Gustavo"],
                    ["nome" => "Felipe"],
                    ["nome" => "Vitor"],
                    ["nome" => "Pietro"],
                    ["nome" => "Benjamin"],
                    ["nome" => "Bryan"],
                    ["nome" => "Emanuelly"],
                    ["nome" => "Cecília"],
                    ["nome" => "Rebeca"],
                    ["nome" => "Isaac"],
                    ["nome" => "Eduardo"], 
                ]
        );
        $alunos = "<ul>";

        if($total <= count($array)) {
            for($a=0; $a<$total; $a++) {
                $alunos = $alunos."<li>".$array[$a]['nome']."</li>";
            }
        }
        $alunos = $alunos."</ul>";     
        return $alunos;
    
})->where('total', '[0-9]+');

Route::get('/aluno/matricula/{matricula}', function ($matricula) {
    
        $array = (
                [
                    ["Matricula" => "01","nome" => "Miguel"],
                    ["Matricula" => "02","nome" => "Davi"],
                    ["Matricula" => "03","nome" => "Arthur"],
                    ["Matricula" => "04","nome" => "Julia"],
                    ["Matricula" => "05","nome" => "Isabella"],
                    ["Matricula" => "06","nome" => "Gabriel"],
                    ["Matricula" => "07","nome" => "Valentina"],
                    ["Matricula" => "08","nome" => "Heitor"],
                    ["Matricula" => "09","nome" => "Beatriz"],
                    ["Matricula" => "10","nome" => "Gustavo"],
                    ["Matricula" => "11","nome" => "Felipe"],
                    ["Matricula" => "12","nome" => "Vitor"],
                    ["Matricula" => "13","nome" => "Pietro"],
                    ["Matricula" => "14","nome" => "Benjamin"],
                    ["Matricula" => "15","nome" => "Bryan"],
                    ["Matricula" => "16","nome" => "Emanuelly"],
                    ["Matricula" => "17","nome" => "Cecília"],
                    ["Matricula" => "18","nome" => "Rebeca"],
                    ["Matricula" => "19","nome" => "Isaac"],
                    ["Matricula" => "20","nome" => "Eduardo"], 
                ]
        );
        $alunos = "<ul>";

        for($a=0; $a<count($array); $a++) {
            if($array[$a]['Matricula'] == $matricula){
                $alunos = $alunos."<li>".$array[$a]['nome']."</li>";
            }
        }
        
        $alunos = $alunos."</ul>";     
        return $alunos;
    
})->where('matricula', '[0-9]+');
Route::get('/aluno/nome/{nome}', function ($nome) {
    
    $array = (
            [
                ["Matricula" => "01","nome" => "Miguel"],
                ["Matricula" => "02","nome" => "Davi"],
                ["Matricula" => "03","nome" => "Arthur"],
                ["Matricula" => "04","nome" => "Julia"],
                ["Matricula" => "05","nome" => "Isabella"],
                ["Matricula" => "06","nome" => "Gabriel"],
                ["Matricula" => "07","nome" => "Valentina"],
                ["Matricula" => "08","nome" => "Heitor"],
                ["Matricula" => "09","nome" => "Beatriz"],
                ["Matricula" => "10","nome" => "Gustavo"],
                ["Matricula" => "11","nome" => "Felipe"],
                ["Matricula" => "12","nome" => "Vitor"],
                ["Matricula" => "13","nome" => "Pietro"],
                ["Matricula" => "14","nome" => "Benjamin"],
                ["Matricula" => "15","nome" => "Bryan"],
                ["Matricula" => "16","nome" => "Emanuelly"],
                ["Matricula" => "17","nome" => "Cecília"],
                ["Matricula" => "18","nome" => "Rebeca"],
                ["Matricula" => "19","nome" => "Isaac"],
                ["Matricula" => "20","nome" => "Eduardo"], 
            ]
    );
    $alunos = "<ul>";

    for($a=0; $a<count($array); $a++) {
        if($array[$a]['nome'] == $nome){
            $alunos = $alunos."<li>".$array[$a]['Matricula']." ".$array[$a]['nome']."</li>";
        }
    }
    
    $alunos = $alunos."</ul>";     
    return $alunos;

})->where('nome', '[A-Za-z]+');

Route::get('/aluno/nota/', function () {
    
    $array = (
            [
                ["Matricula" => "01","nome" => "Miguel","nota" => "9.7"],
                ["Matricula" => "02","nome" => "Davi","nota" => "8.5"],
                ["Matricula" => "03","nome" => "Arthur","nota" => "2.4"],
                ["Matricula" => "04","nome" => "Julia","nota" => "4.3"],
                ["Matricula" => "05","nome" => "Isabella","nota" => "9.9"],
                ["Matricula" => "06","nome" => "Gabriel","nota" => "0.2"],
                ["Matricula" => "07","nome" => "Valentina","nota" => "8.4"],
                ["Matricula" => "08","nome" => "Heitor","nota" => "8.2"],
                ["Matricula" => "09","nome" => "Beatriz","nota" => "3.5"],
                ["Matricula" => "10","nome" => "Gustavo","nota" => "7.1"],
                ["Matricula" => "11","nome" => "Felipe","nota" => "7.7"],
                ["Matricula" => "12","nome" => "Vitor","nota" => "9.0"],
                ["Matricula" => "13","nome" => "Pietro","nota" => "5.4"],
                ["Matricula" => "14","nome" => "Benjamin","nota" => "6.5"],
                ["Matricula" => "15","nome" => "Bryan","nota" => "9.8"],
                ["Matricula" => "16","nome" => "Emanuelly","nota" => "8.9"],
                ["Matricula" => "17","nome" => "Cecília","nota" => "10.0"],
                ["Matricula" => "18","nome" => "Rebeca","nota" => "9.9"],
                ["Matricula" => "19","nome" => "Isaac","nota" => "1.0"],
                ["Matricula" => "20","nome" => "Eduardo","nota" => "10.0"], 
            ]
    );
    $alunos = "<ul>";

    for($a=0; $a<count($array); $a++) {
         $alunos = $alunos."<li>".$array[$a]['nome']." - ".$array[$a]['nota']."</li>";
    }
    
    $alunos = $alunos."</ul>";     
    return $alunos;

})->where('nome', '[A-Za-z]+');

Route::get('/aluno/nota/limite/{limite}', function ($limite) {
    
    $array = (
            [
                ["Matricula" => "01","nome" => "Miguel","nota" => "9.7"],
                ["Matricula" => "02","nome" => "Davi","nota" => "8.5"],
                ["Matricula" => "03","nome" => "Arthur","nota" => "2.4"],
                ["Matricula" => "04","nome" => "Julia","nota" => "4.3"],
                ["Matricula" => "05","nome" => "Isabella","nota" => "9.9"],
                ["Matricula" => "06","nome" => "Gabriel","nota" => "0.2"],
                ["Matricula" => "07","nome" => "Valentina","nota" => "8.4"],
                ["Matricula" => "08","nome" => "Heitor","nota" => "8.2"],
                ["Matricula" => "09","nome" => "Beatriz","nota" => "3.5"],
                ["Matricula" => "10","nome" => "Gustavo","nota" => "7.1"],
                ["Matricula" => "11","nome" => "Felipe","nota" => "7.7"],
                ["Matricula" => "12","nome" => "Vitor","nota" => "9.0"],
                ["Matricula" => "13","nome" => "Pietro","nota" => "5.4"],
                ["Matricula" => "14","nome" => "Benjamin","nota" => "6.5"],
                ["Matricula" => "15","nome" => "Bryan","nota" => "9.8"],
                ["Matricula" => "16","nome" => "Emanuelly","nota" => "8.9"],
                ["Matricula" => "17","nome" => "Cecília","nota" => "10.0"],
                ["Matricula" => "18","nome" => "Rebeca","nota" => "9.9"],
                ["Matricula" => "19","nome" => "Isaac","nota" => "1.0"],
                ["Matricula" => "20","nome" => "Eduardo","nota" => "10.0"], 
            ]
    );
    $alunos = "<ul>";

    for($a=0; $a<=$limite; $a++) {
         $alunos = $alunos."<li>".$array[$a]['nome']." - ".$array[$a]['nota']."</li>";
    }
    
    $alunos = $alunos."</ul>";     
    return $alunos;

})->where('limite', '[0-9]+');

Route::get('/aluno/nota/lancar/{nota}/{matricula}', function ($nota,$matricula) {
    
    $array = (
            [
                ["Matricula" => "01","nome" => "Miguel","nota" => "9.7"],
                ["Matricula" => "02","nome" => "Davi","nota" => "8.5"],
                ["Matricula" => "03","nome" => "Arthur","nota" => "2.4"],
                ["Matricula" => "04","nome" => "Julia","nota" => "4.3"],
                ["Matricula" => "05","nome" => "Isabella","nota" => "9.9"],
                ["Matricula" => "06","nome" => "Gabriel","nota" => "0.2"],
                ["Matricula" => "07","nome" => "Valentina","nota" => "8.4"],
                ["Matricula" => "08","nome" => "Heitor","nota" => "8.2"],
                ["Matricula" => "09","nome" => "Beatriz","nota" => "3.5"],
                ["Matricula" => "10","nome" => "Gustavo","nota" => "7.1"],
                ["Matricula" => "11","nome" => "Felipe","nota" => "7.7"],
                ["Matricula" => "12","nome" => "Vitor","nota" => "9.0"],
                ["Matricula" => "13","nome" => "Pietro","nota" => "5.4"],
                ["Matricula" => "14","nome" => "Benjamin","nota" => "6.5"],
                ["Matricula" => "15","nome" => "Bryan","nota" => "9.8"],
                ["Matricula" => "16","nome" => "Emanuelly","nota" => "8.9"],
                ["Matricula" => "17","nome" => "Cecília","nota" => "10.0"],
                ["Matricula" => "18","nome" => "Rebeca","nota" => "9.9"],
                ["Matricula" => "19","nome" => "Isaac","nota" => "1.0"],
                ["Matricula" => "20","nome" => "Eduardo","nota" => "10.0"], 
            ]
    );
    $alunos = "<ul>";

    for($a=0; $a<=count($array); $a++) {
        if($array[$a]['Matricula'] == $matricula){

           $notaAntiga =  $array[$a]['nota'];
           $array[$a]['nota'] = $nota;
           $alunos = $alunos."<li>"."Nota Antiga = ". $notaAntiga." <br>Nova nota = ".$array[$a]['nota']."</li>";
           break;
        }
    }
    
    $alunos = $alunos."</ul>";     
    return $alunos;

})->where('nota', '[0-9]+')->where('matricula', '[0-9]+');
