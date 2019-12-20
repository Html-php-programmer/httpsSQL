function createXmlHttpRequestObject() {
  // функция создает и возварщает объект типа Ajax-запрос 
  var xmlHttp;
  try {
    xmlHttp = new XMLHttpRequest();
  }
  catch (e) {
    try {
      xmlHttp = new ActiveXObject("MSXML2.XMLHTTP");
    }
    catch (e) {
      try {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch (e) { }
    }
  }
  if (!xmlHttp) {
    alert("Не удалось создать объект XMLHttpRequest");
  }
  return xmlHttp;
}
//TODO: function getResponceText and Recieve по желанию
function getResponceText(xmlHttp) {
  return xmlHttp.responceText;
}

function Display(obj) {

}

function Receive(req) {

}
function Init(value) {
  // создание объекта для выполнения AJAX-запроса
  // и назначение обработчика ответа
  var req = createXmlHttpRequestObject();
}

function Send(req, value) {

}