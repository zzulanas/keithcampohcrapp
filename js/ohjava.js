var pressed = false;
var test = "hey"
var masternum = 0;
function pressing(){
  pressed = true;
  document.getElementById("test").innerHTML = test;
  WriteToFile();

}

function WriteToFile() {

  set fso = CreateObject("Scripting.FileSystemObject");
  set s = fso.CreateTextFile("C:\Users\Zach2\Documents\OhCrapApp\ohno.txt", True);
  s.write("1");
  s.Close();
}

function press2(){

}

function reset(){

}
