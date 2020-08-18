
/*
window.onload = function (event){




document.getElementsByClassName("newComent")[0].getElementsByTagName("input")[0]
.addEventListener("keypress",function foo3(e) { return this.value.length <6 ? true :  e.preventDefault() },false);

///////////// Прокрутка ленты меню
let a = document.querySelectorAll(".imgFlex > div>div")
a=[...a];
a.forEach((e,i,a)=>{
	if(i==0) return;
	e.style.background= "url('../img/"+i+".jpg') center no-repeat ";
	e.style.backgroundSize= "cover";
})
function srollHeaderImg1(argument) {
	let imgFlex =document.querySelector(".imgFlex")
	let i = 0;
	let a = 0;
	let scroll;
	let lengthScrollImg = document.querySelector(".imgFlex").children.length-3;
	let scrollMax = lengthScrollImg*400;

	//вешаем обработчики событий на кнопки прокрутки
	[].forEach.call(document.querySelector(".flexSpan").children,function(e,j,a){
		if(j==0){
			e.addEventListener("click",funckSkroll1,false)
			function funckSkroll1(){
				imgFlex.scrollBy(-400,0);
			}
		}else{
			e.addEventListener("click",funckSkroll2,false)
			function funckSkroll2(){	
				imgFlex.scrollBy(400,0);
			}
		}
	})
	return function function_name() {
		if(imgFlex.scrollLeft<=0){
			let interval1 = setInterval(()=>{
			imgFlex.scrollBy(400,0);
			if(imgFlex.scrollLeft>=scrollMax){clearTimeout(interval1);function_name()}
			},3000)
		}
		else {
			let interval2 = setInterval(()=>{
			imgFlex.scrollBy(-400,0);
			if(imgFlex.scrollLeft<=0){
				clearTimeout(interval2);
				function_name();
			}
			},3000)
		}
	}
}
srollHeaderImg1()();
	

////////////Переключение между вкладками
function changDerection() {
	[].forEach.call(document.querySelectorAll("div.menuFlex span"),(e,i)=>{
		switch(i){
			case 0: e.addEventListener("click",()=>{
				e.style.backgroundColor ="#fff";
				e.nextElementSibling.style.backgroundColor ="#D8D8D8FF";
				e.nextElementSibling.nextElementSibling.style.backgroundColor ="#D8D8D8FF";
				document.querySelector(".newBockmenu").style.display ="none";
				document.querySelector(".newComent").style.display ="none";
				document.querySelector("#content").style.display="block";
			},false);break;
			case 1: e.addEventListener("click",()=>{
				e.style.backgroundColor ="#fff";
				e.previousElementSibling.style.backgroundColor ="#D8D8D8FF";
				e.nextElementSibling.style.backgroundColor ="#D8D8D8FF";
				document.querySelector("#content").style.display ="none";
				document.querySelector(".newComent").style.display ="none";
				document.querySelector(".newBockmenu").style.display="block";
			},false);break;
			case 2: e.addEventListener("click",()=>{
				e.style.backgroundColor ="#fff";
				e.previousElementSibling.style.backgroundColor ="#D8D8D8FF";
				e.previousElementSibling.previousElementSibling.style.backgroundColor ="#D8D8D8FF";
				document.querySelector(".newBockmenu").style.display ="none";
				document.querySelector("#content").style.display ="none";
				document.querySelector(".newComent").style.display="block";
			},false);break;
		}
	})
}
changDerection();

// функция добавлениея нового блока

document.querySelector(".newBockmenu form button").addEventListener("click",foo,false)

function foo(e) {
	let div = document.createElement("div");
	div.className = 'foo';
	document.querySelector(".newBockmenu select").value==1?div.classList.add("box"):div.classList.add("box","boxall");
	let img = document.querySelector("#fille");
	let reader = new FileReader();
	let src;
	reader.readAsDataURL(img.files[0]);
	let promis = new Promise((resolve)=>{
		reader.onload = function (){
			src = reader.result;
			resolve();
		}
	}).then(()=>{
		let span = document.createElement("span");
		if(document.querySelector(".newBockmenu input[type=radio]:checked").value=="in"){
			let img = document.createElement("img");
			img.src = src;
			div.appendChild(img);
		}else{
			span.classList.add("spanBoxall");
			div.style.background="url('"+src+"') left repeat-x";
			div.style.backgroundSize="contain";
		}		
		span.textContent = document.querySelector(".newBockmenu textarea").value;
		div.appendChild(span);
		document.querySelector("#content .grid").appendChild(div);
	})


	e.preventDefault();
}

//////// Добавление коментариев
document.querySelector(".newComent button").addEventListener("click",newComent,false)

function newComent(e) {
	let div = document.createElement("div");
	div.classList.add("comentFlex");
	let span = document.createElement("span");
	span.classList.add("left","comentName");
	span.textContent = document.querySelector(".newComent form input").value;
	let span2 = document.createElement("span");
	span2.classList.add("right","ComentData");
	span2.textContent = new Date().toLocaleString();
	let div2 = document.createElement("div");
	let span3 = document.createElement("span");
	span3.textContent = document.querySelector(".newComent form textarea").value;
	div2.appendChild(span3);
	div.appendChild(span);
	div.appendChild(span2);
	div.append(div2)
	document.querySelector(".coment").appendChild(div);
	e.preventDefault();
}



}
*/


jQuery(document).ready( function($) {


$(".newComent input:text").keypress(function (e) { 
	 return $(this).val().length <6 ? true :  false;    

})
///////////// Прокрутка ленты меню
$(".imgFlex > div>div:gt(0)").css({"background":function(i,v){
	return  "url('img/"+i+".jpg') center no-repeat "
},"background-size": "cover"})

function srollHeaderImg(argument) {
	let i = 0;
	let a = 0;
	let scroll;
	let lengthScrollImg = $(".imgFlex").children().length-2;
	$(".flexSpan").children().each(function(j,e){
	if(j==0){
		$(e).click(()=>{
			$(".imgFlex").scrollLeft($(".imgFlex").scrollLeft()-400);
			i>1 ? i-- : i;
		})
		}else{
			$(e).click(()=>{
				$(".imgFlex").scrollLeft($(".imgFlex").scrollLeft()+400);
				$(".imgFlex").children().length-3 > i? i++ : i;
				})	
			}
		})
	return function foo() {
		if(i<2){
			let interval1 = setInterval(function(){
			if(lengthScrollImg > i){
				scroll = 400*i;
				$(".imgFlex").scrollLeft(scroll)
				i++;	
				}else {
					i=i-2;
					clearTimeout(interval1)
					foo();
				}
			},3000)
		}else {
			let interval2 = setInterval(function(){
			if(i>=0){
				scroll = 400*i;
				$(".imgFlex").scrollLeft(scroll)
				i--;	
				}else {
					i=i+2;
					clearTimeout(interval2)
					foo();
				}
			},3000)
		}
	}
}
srollHeaderImg()();


////////////Переключение между вкладками
function changDerection() {

	[].forEach.call($("div.menuFlex span"),(e,i,m)=>{
		switch(i){
			case 0 : $(e).click(()=>{
				$(e).css({"background-color":"#fff"}).siblings().css({"background-color":"#D8D8D8FF"});
				$("#content").css({"display":"block"});
				$(".newBockmenu , .newComent").css({"display":"none"}) }) ;break;
			case 1 : $(e).click(()=>{
				$(e).css({"background-color":"#fff"}).siblings().css({"background-color":"#D8D8D8FF"});
				$(".newBockmenu").css({"display":"block"});
				$("#content, .newComent").css({"display":"none"}) });break;
			case 2 : $(e).click(()=>{
				$(e).css({"background-color":"#fff"}).siblings().css({"background-color":"#D8D8D8FF"});
				$(".newComent").css({"display":"block"});
				$(".newBockmenu , #content").css({"display":"none"}) });break;
		}
	})
}
changDerection();

// функция добавлениея нового блока
$(".newBockmenu form button").click((e)=>{
	let newBlock = $("<div></div>").addClass(()=>$(".newBockmenu select").val() == 1 ? "box" : "box boxall");
	let img = document.querySelector("#fille")
	let reader = new FileReader();
	let src;
	reader.readAsDataURL(img.files[0]);
	let promis = new Promise((resolve)=>{
		reader.onload = function (){
			src = reader.result;
			resolve();
		}
	}).then(()=>{
		if($(".newBockmenu input:radio:checked").val() == "in"){
			newBlock.removeClass("boxall").append($("<img src='"+src+"' title='dfsdfds'>"));
			newBlock.append($("<span></span>").text($(".newBockmenu textarea").val()));
		}else{ newBlock.css({"background": "url('"+src+"') left repeat-x" , "background-size": "contain"})
		newBlock.append($("<span></span>").addClass("spanBoxall").text($(".newBockmenu textarea").val()));
		 }
		$("#content .grid").append(newBlock);
	})
e.preventDefault();
});

//////// Добавление коментариев

$(".newComent button").on("click",
function (e){
	let a =$("<div class='comentFlex'></div>").append($("<span class='left comentName'></span>").text($(".newComent form input:text").val()))
	.append($("<span class='right ComentData'></span>").text(()=>new Date().toLocaleString()))
	.append($("<div class='clear'></div>")).append($("<div></div>").html($("<span></span>").text($(".newComent form textarea").val()))).
	appendTo(".coment");
	return false;
})

});
