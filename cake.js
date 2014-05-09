function tcompute()   

{
var c1,c2,c3,c4;

var tcost=0,cost1=0,cost2=0,cost3=0,cost4=0;     

c1=document.cake1.t1.value;

c2=document.cake2.t2.value; 

c3=document.cake3.t3.value;

c4=document.cake4.t4.value;

cost1=(c1*60)+(c2*80)+(c3*90)+(c4*50);

document.tcost.p1.value= cost1;

var x=cost1;

document.tcost.p1.value=x;

}
