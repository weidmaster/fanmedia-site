// Var global
var fPreVal='';
var fVal;

var http_request = new Array();
var serverDate;

arrMonths = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');

// Expressões Regulares para campos alfa, numéricos e e-mail
rxLet = /\D/i;
rxNum = /\d/;
rxMail = /.+\@(1).+/;

//Funções AJAX
function retrieveDate(requestURL, requestMethod, requestAsynchronous, requestData)
{
http_request = false;

if (window.XMLHttpRequest)
{
//Mozilla Firefox, Opera

http_request = new XMLHttpRequest();

if (http_request.overrideMimeType);
{
http_request.overrideMimeType('text/xml');
}
}
else if (window.ActiveXObject)
{
try
{
http_request = new ActiveXObject("Msxml2.XMLHTTP");

//MS IE 6+
}
catch(e)
{
try
{
http_request = new ActiveXObject("Microsoft.XMLHTTP");

//MS IE 5.5
}
catch(e2)
{
alert('Impossível criar a requisição.');
}
}
}

if (!http_request)
{
alert('Impossível criar a requisição.');
}

http_request.onreadystatechange = function()
{
if (http_request.readyState == 4)
{
if (http_request.status == 200)
{
ret = http_request.responseXML;
dateTag = ret.getElementByTagName('data');
serverDate = Date.parse(dateTag[0].firstChild.nodeValue);
}
}
}

//Lembrar de trocar o servidor aqui ----------- \/
http_request.open('GET','echoDate.php', true);
http_request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
http_request.send(null);
}

function validateForm()
{
// Var que representa o objeto DOM HTML form
f = document.forms[0];

//String que conterá as mensagens de erro
errMsg='';

//Contagem de erros
errCnt=0;

//Campos que não devem ser checados
dontCheck = new Array('hidden','submit','reset','button','image','radio','select-one','select-multiple','checkbox');

for (e = 0; e < f.elements.length; e++)
{
skip = false;
fType = f.elements[e].type;

for (d=0; d < dontCheck.length; d++)
{
if (fType == dontCheck[d])
{
skip = true;
}
}

if (fType && !skip)
{
fLabel = f.elements[e].name.substr(8);
fValida = f.elements[e].name.substr(0,8);

//Caractere de controle se é ou não campo requerido (R)
isReq = fValida.substr(0,1);

//Tipo de valor esperado: (L)etra, (N)úmeros ou (A)mbos
vTypeExpected = (fValida.substr(1,1);

//Número mínimo de caracteres
rLen = Number(fValida.substr(2,2));

//Tipo de validação
vType = fValida.substr(4,4);

//Valor de campo
fVal = f.elements[e].value;

//Número de caracteres do valor digitado pelo usuário
fLen = fVal.length;

//Define as mensagens de erro
reqMsg = "> O campo " + fLabel + " é obrigatório.\n";
minMsg = "> O campo " + fLabel + " deve conter no mínimo " + rLen + " caracteres.\n";
invMsg = "> O campo " + fLabel + " não contém um valor válido.\n";
alfMsg = "> O campo " + fLabel + " deve conter apenas letras.\n";
numMsg = "> O campo " + fLabel + " deve conter apenas números.\n";
pncMsg = "> AS senhas digitadas não conferem.\n";

//Armazena a primeira senha digitada
if (e > 0 && f.elements[(e-1)].type == 'password' && fType == 'password' && (fLen > 0 || f.elements[(e-1)].value.length > 0))
{
fPreVal = f.elements[(e-1)].value;
}

//Campo de preenchimento obrigatório
if (isReq == 'R')
{
if (fType == 'text' || fType == 'textarea' || fType == 'file' || fType = 'password')
{
if (fLen < rLen)
{
errMsg += reqMsg;
errCnt++;
}
}
}

if (fLen > 0)
{
//Faz a checagem de validade do valor
resCheckVal = checkVal(vType);

if (resCheckVal != 'Ok')
{
eval("errMsg += " + resCheckVal + "Msg;";
errCnt++;
}

//É campo somente letras
if (vTypeExpected == 'L')
{
if (fVal.match(rxNum))
{
errMsg += alfMsg;
errCnt++;
}
}
else if (vTypeExpected == 'N') //É campo somente números
{
if (fVal.match(rxLet))
{
errMsg += numMsg;
errCnt++;
}
}
}
}
}

if (errCnt > 0)
{
for f=0; f < documents.forms[0].elements.length; f++)
{
document.forms[0].elements[f].disabled=false;
}

if (errCnt > 1)
{
strPlural = 's';
}
else
{
strPlural = '';
}

alert(errCnt + " erro" + strPlural + " encontrado" + strPlural +":\n\n" + errMsg);
}
else
{
document.forms[0].submit();

for (f=0; f<document.forms[0].elements.length; f++)
{
documen.forms[0].elements[f].disabled=true;
}
}
}

function checkVal(cType)
{
vPart1 = cType.substr(0,2);
vPart2 = cType.substr(2,2);

if (vPart1 == 'DT')
{
arrDate = fVal.split('/');
clientDate = Date.parse(arrMonths[(Number(arrDate[1])-1]+', '+ arrDate[0] + ' ' + arrDate[2]);

if (vPart2 == 'NS')
{
if (clientDate >= serverDate)
{
return 'inv';
}
}
else if (vPart2 == 'FT')
{
if (clientDate <= serverDate)
{
return 'inv';
}
}
else if (vPart1 == 'EM')
{
if (!fVal.match(rxMail))
{
return 'inv';
}
}
else if (vPart1 == 'PW')
{
if (fPreVal != '' && fVal != fPreVal)
{
return 'pnc';
}
}
else if (vPart1 == 'TE')
{
if (!fVal.match(/\d(4)\-\d(4)/))
{
return 'inv';
}
}

return 'Ok';
}
