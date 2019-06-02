//creating objects through literals
var person=
{
	f_name:"Ram",
	l_name:"Kumar",
	age:21,
	fullname:function()
	{
		return this.f_name+this.l_name
	}
}
console.log(person)
//creating objects through constructor
function Batsman(name,runsscored,ballsfaced,average)
{
	this.name=name;
	this.runsscored=runsscored;
	this.ballsfaced=ballsfaced;
	this.average=average;
	this.strikrate=function()
{
	return this.runsscored/this.ballsfaced;
} 
}
console.log(Batsman)

Dhoni =new Batsman("Dhoni","10000","8000","50.0")
  console.log(Dhoni.strikrate())	
Virat =new Batsman("Virat","15000","7000","54.0")
  console.log(Virat.strikrate())
  
