<?php 

// 27 -	Escreva um programa que, a partir do preço em euros e do dinheiro entregue, apresente o troco usando o menor número possível de moedas.
$coins = [100,50,20,10,5,2,01];
$coinsChange = [];

echo "Digite o valor do produto: ";
$price = intval(fgets(STDIN)); 
echo "Digite o valor que o cliente pagou: ";
$clientPay = intval(fgets(STDIN)); 


$change = $clientPay - $price;

do{
    foreach($coins as $coin){
        if($coin <= $change){
            $change = $change - $coin;
            $coinsChange[] = $coin;
        }
    }
}while($change != 0);

echo "Valor do Produto: {$price} \nCliente Pagou: {$clientPay} \nMoedas usadas: ";
foreach($coinsChange as $key => $value){
    echo "{$value}, ";
}
echo "\n";


// 26 -	Crie um programa que imprima um número de 4 dígitos invertido (ex. 4536 -> 6354).
$number = 4536;
$revsereNumber = 0;

while ($number != 0)
{
$revsereNumber = $revsereNumber * 10 + $number % 10;
$number= (int)($number / 10); 
}
 
echo $revsereNumber;
echo "\n";


// 25 -	Escreva um programa que indique ao utilizador todos os números primos entre dois números inteiros introduzidos pelo utilizador.

function checkPrimeNumber($number)
{
 for($i=2; $i<$number; $i++)
   {
      if($number %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
}

$realNumbers = [];

echo "Digite um valor real: ";
$realNumbers[]  = intval(fgets(STDIN));
echo "Digite um outro valor real: ";
$realNumbers[]  = intval(fgets(STDIN));

$maxRealValue = max($realNumbers);
$minRealValue = min($realNumbers);

for($i = $minRealValue + 1; $i < $maxRealValue; $i++ ){

    $checkPrimeNumber = checkPrimeNumber($i);
    
    if (!($checkPrimeNumber==0))
    echo "{$i}, ";
    
}

// 24.	Escreva um programa em que o utilizador introduz números inteiros até introduzir um número em que a soma dos algarismos seja superior a 20.

$value20 = [];
$valueHigh20 = false;

do{
    echo 'Insira um número positivo: ';
    $value20[] = intval(fgets(STDIN));

    if(array_sum($value20) > 20)
    $valueHigh20 = true;

}while(!($valueHigh20 = false));


//23 - Escreva um programa que leia 10 valores do utilizador e indique no fim se foi introduzido algum número divisível por 7.

$numbers = [];
$number7 = 0;
for($i=0; $i<5; $i++){
    echo 'Insira um número positivo: ';
    $numbers[] = intval(fgets(STDIN));
    if ($numbers[$i] % 7 == 0)
        $number7++;
}

if ($number7 > 0 )
    echo "Foram introduzidos {$number7} números divisíveis por 7";
    else
    echo "Não foram introduzidos nenhum número divisível por 7";


// 22 -	Escreva um programa em que o utilizador introduza números até introduzir um número par seguido de um número ímpar.

$numbers = [];
$oddFollowEven = false;
$n = 0;

do{

    echo 'Insira um número positivo: ';
    $numbers[$n] = intval(fgets(STDIN));

    if(count($numbers) > 1){
        if($numbers[$n - 1] % 2 == 0 && $numbers[$n] % 2 == 1)
            $oddFollowEven = true;
    }
    $n++;
}
while($oddFollowEven == false);



// 21.	Escreva um programa que leia 5 números do utilizador e indique, no fim, quantos números são primos, quantos são pares e quantos são divisíveis por 3.

$primeNumber = 0;
$oddNumber = 0;
$divisibleBy3 = 0;


function checkPrimeNumber21($number)
{
 for($i=2; $i<$number; $i++)
   {
      if($number %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
}


for ($i=0; $i < 5; $i++){
    echo "Digite um valor inteiro: ";
    $intNumber = intval(fgets(STDIN));

    // Prime Numbers
    $primeNumber = checkPrimeNumber21($intNumber);
    if (!($primeNumber==0))
    $primeNumber++;

    // Odd Numbers 
    if($intNumber % 2 == 0)
    $oddNumber++;

    if($intNumber % 3 == 0)
    $divisibleBy3++;

}

echo "{$primeNumber} números primos, {$oddNumber} numeros pares e {$divisibleBy3} divisíveis por 3. ";


// 20 - Escreva um programa em que o utilizador vai introduzindo números inteiros positivos até o número introduzido ser um número primo

function primeNumberCheck($number)
{
 for($i=2; $i<$number; $i++)
   {
      if($number %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
}

$primeNumber =false;
do{
    echo "Digite um valor inteiro: ";
    $i = intval(fgets(STDIN));

    $checkPrimeNumber = primeNumberCheck($i);
    if (!($checkPrimeNumber==0)){
        echo "{$i} é um número primo.";
        $primeNumber = true;
    }
    
    
}while($primeNumber == false);


// 19 -	Crie um programa que determine se um número inteiro é primo. ** falta dizer se é inteiro ou string

function primeNumber($number)
{
 for($i=2; $i<$number; $i++)
   {
      if($number %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
}

do{
    echo 'Digite um número inteiro: ';
    $intNumber = intval(fgets(STDIN));
}
while(!(is_int($intNumber)));

$checkPrimeNumber = primeNumber($intNumber);

if ($checkPrimeNumber==0)
echo "O número {$intNumber} não é um número primo.";
else
echo "O número {$intNumber} é um número primo.";



// ** 05 - 18 - Escreva um programa que some os algarismos de um número.
echo "digite um valor: ";
$number = intval(fgets(STDIN));
$sumInts = 0;
do {
    $sumInts += $number % 10;
}
while ($number = $number / 10);
echo $sumInts;


// 16 - Escreva um programa que apresente todos os números inteiros entre dois números reais introduzidos pelo utilizador.
$realNumbers = [];

echo "Digite um valor real: ";
$realNumbers[]  = intval(fgets(STDIN));
echo "Digite um outro valor real: ";
$realNumbers[]  = intval(fgets(STDIN));

$maxRealValue = max($realNumbers);
$minRealValue = min($realNumbers);

for($i = $minRealValue + 1; $i < $maxRealValue; $i++ ){
    echo "{$i}, ";
}




// 15 - Escreva um programa que leia n números (sendo n introduzido pelo utilizador) e indique se os números são todos pares, se são todos ímpares ou se há ambos os tipos.

$numerosParesImpares = [];
$numerosPares = 0;
$numerosImpares = 0;

echo 'Quantos números quer inserir: ';
$totalNumeros = intval(fgets(STDIN));

for ($i=0; $i < $totalNumeros; $i++ ){
    echo "Digite o valor do número {$i}: ";
    $numero = intval(fgets(STDIN));
    $numerosParesImpares[] = $numero; 
}

for ($i=0; $i < $totalNumeros; $i++ ){
    
    if ($numerosParesImpares[$i] % 2 == 0){
        $numerosPares++;
    }
    if ($numerosParesImpares[$i] % 2 == 1){
        $numerosImpares++;
    }
}
echo "Numeros pares {$numerosPares} ";
echo "Numeros impares {$numerosImpares} ";

if($numerosPares > 0 && $numerosImpares > 0 ){
    echo "Possui números pares e ímpares";
    return;
}
if($numerosPares > 0 ){
    echo "Possui apenas números pares";
    return;
}
if( $numerosImpares > 0){
    echo "Possui apenas números ímpares";
    return;
}


// 14 -	Escreva um programa que leia n números (sendo n introduzido pelo utilizador) e indique se os números são todos iguais.

echo "Quantos números quer incluir? ";
$nNumeros = intval(fgets(STDIN));
$nNumerosArray = [];

for ($i=0; $i < $nNumeros; $i++){
    echo "Digite o número {$i}  : ";
    $numeros = intval(fgets(STDIN));
    $nNumerosArray[] = $numeros; 
}
if (count(array_unique($nNumerosArray)) == 1){
    echo "Todos os números são iguais.";
}else{
    echo "Os números são diferentes";
}

// 13 - Escreva um programa que leia 6 números inteiros e indique se um número é igual ao anterior. No final deverá indicar quantos números introduzidos são iguais ao anterior.
$numbers = [];
$numbersIquals = 0;
for($i = 0; $i < 6; $i++ ){
    echo 'Insira um número: ';
    $numbers[] = intval(fgets(STDIN));
    if(count($numbers) > 1) {
        if($numbers[$i] == $numbers[$i - 1]){
            echo "Este número é igual ao anterior.";
            $numbersIquals++;
        }
    }
}
echo "Você digitou {$numbersIquals} iguais.";


// 12** - Escreva um programa para ler as notas de n alunos (sendo n introduzido pelo utilizador). As notas deverão estar entre 1 e 5. 
//O programa deverá contar quantos alunos tiveram cada uma das notas possíveis.

echo "Quantos alunos quer incluir: ";
$numberStudents  = intval(fgets(STDIN));
$studentsNotes = [];
$totalValidNotes = count($studentsNotes);

for ($i=0; $i < $numberStudents; $i++){

    echo "Qual a nota do aluno {$i}: ";
    $studentNote = intval(fgets(STDIN));
    
    if(!($studentNote < 1 && $studentNote > 5)){
        $n = isset($studentsNotes[$studentNote]) ? $studentsNotes[$studentNote] :0;
        $studentsNotes[$studentNote] = $n + 1 ;
    }    
}

foreach($studentsNotes as $note => $total){
    echo 'A nota ' . $note . ' teve ' . $total;}

/*for($i=1; $i <= 5; $i++){

        $tmp = array_count_values($studentsNotes);
        print_r($tmp);

}*/



// 11 - Escreva um programa em que o utilizador vai introduzindo números positivos até ser introduzido o valor 0 (zero). No fim o programa indicará a percentagem de números pares introduzidos.

$numerosPositivos = [];

do {
    echo 'Escreva um número positivo (zero para sair): ';
    $positivo = intval(fgets(STDIN));
    if($positivo > 0)
        $numerosPositivos[] = $positivo;
    
}   while($positivo != 0);

$totalNumeros = count($numerosPositivos);
$numerosPares = 0;

for ($i=0; $i < $totalNumeros; $i++ ){
    
    if ($numerosPositivos[$i] % 2 == 0)
        $numerosPares++;
    
}

$porcentagem = ($numerosPares * 100) / $totalNumeros;
echo "Total de números positivos: {$totalNumeros} e um total de {$numerosPares} números pares. Equivalente a {$porcentagem}% de números pares. ";



// 10 - Escreva um programa em que o utilizador vai introduzindo as idades dos alunos de uma determinada turma até ser introduzido o número -1. 
// No fim deverá indicar o número de alunos e a média de idades. O programa deverá garantir que apenas são introduzidos números positivos (com a exceção do -1 final). 

$alunos = [];

do {
    echo 'Escreva a idade do aluno: ';
    $idade = intval(fgets(STDIN));
    if($idade > 0){
        $alunos[] = $idade;
    }
}   while($idade != -1);

if(count($alunos) > 0) {
    echo "Numero de alunos: ";
    echo $numeroAlunos = count($alunos);
    echo " Média de alunos: ";
    echo $mediaIdadesAlunos = (array_sum($alunos) / $numeroAlunos);
}
else{
    echo "Não inseriu nenhum número positivo";
}


// 9 - Escreva um programa que leia 4 números inteiros introduzidos pelo utilizador e indique o máximo, a média, o mínimo e a soma dos valores.

$intervalos = [];

for ($i=0; $i<4; $i++){
    echo "Escreva o número {$i}: ";
    $intervalos[] = intval(fgets(STDIN));
}

$maiorValor=max($intervalos);
$menorValor=min($intervalos);
$somaValores= array_sum ($intervalos);
$mediaValor = ($somaValores / count($intervalos));

echo "Maior valor: {$maiorValor}, Menor Valor: {$menorValor}, Soma dos Valores: {$somaValores}, Média dos valores: {$mediaValor} ";


// 8 - Crie um programa que escreva os números inteiros entre 0 e 100 em intervalos (incremento) dados pelo utilizador.
// O intervalo deverá ser um número entre 1 e 10. (Por exemplo, com intervalos de 4).

echo 'Escreva um intervalo: ';
$intervalo = intval(fgets(STDIN));

for($i=0; $i <= 100; $i+= $intervalo){
    echo $i;
}



// 7 - Escreva um programa que apresente a tabuada dum número inteiro entre 1 e 9 dado pelo utilizador. Se o número estiver fora dessa gama, o programa deverá dar uma mensagem.

function tabuada(){

    do{
        echo "Escreva um número entre 1 e 9: ";
        $valorTabuada = intval(fgets(STDIN));
        if($valorTabuada > 9 || $valorTabuada < 0){
            echo "Voce digitou {$valorTabuada}. Digite um valor entre 1 a 9: ";
        }
    }while($valorTabuada > 9 || $valorTabuada < 0);

    for($i = 0; $i <=10; $i++){
        $resultado = $valorTabuada * $i;
        echo "$valorTabuada x $i = $resultado, "; 
    }
}
tabuada();


// 06 - Escreva um programa para imprimir todos os números inteiros entre dois valores introduzidos pelo utilizador. O programa deverá verificar qual dos dois valores é o maior.

echo 'Digite o primeiro valor: ';
$valorUm = intval(fgets(STDIN));
echo 'Digite o segundo valor: ';
$valorDois = intval(fgets(STDIN));


$valorMax=max($valorUm, $valorDois);
$valorMin=min($valorUm, $valorDois);

/* OU

if($valorUm > $valorDois){
    $valorMax = $valorUm;
    $valorMin = $valorDois; 
}
else{
    $valorMax = $valorDois;
    $valorMin = $valorUm; 
}
*/

for($i= $valorMin+1; $i < $valorMax; $i++){
    echo " {$i} - ";
}


// 04 - 17 - Escreva um programa que calcule o factorial de um número.
echo 'Digite um valor para realziar a factoração: ';
$nf = intval(fgets(STDIN));

for($i = $nf -1 ; $i > 0; $i--){
    $nf *= $i;
}

echo $nf;
echo "<br>";


// 03 - Escreva um programa que leia n números (sendo n introduzido pelo utilizador) e indique se os números são todos iguais.

echo "Quantos números quer digitar? ";
$n = fgets(STDIN);
$numeros = [];

for($i = 1; $i <= $n ; $i++){
    echo "Digite um número {$i} : ";
    $nNumeros = fgets(STDIN);
    $numeros[] = $nNumeros;
}

if (count(array_unique($numeros)) == 1){
    echo "Todos os números são iguais.";
}else{
    echo "Os números são diferentes";
}


// 02 - Escreva um programa que peça ao utilizador um nome e um número inteiro (entre 1 e 20). Deverá mostrar esse nome um número de vezes igual a esse valor inteiro.

echo "Digite seu nome: ";
$nome = fgets(STDIN);
echo "Digite um valor inteiro de entre 1 e 20: ";
$numero = fgets(STDIN);

for($i = 1; $i <= $numero; $i++){
    echo $nome;
}


// 01 - Escreva um programa para imprimir os números inteiros entre 1 e 10 na mesma linha, primeiro em ordem crescente e depois em ordem decrescente.

for($i = 1; $i <=10 ; $i++){
    echo $i;
}
for($i = 10; $i >0 ; $i--){
    echo $i;
}




















