s=int(input("enter current year"))
a=int(input("enter futear year"))
list=[]
list=[i for i in range(s,a) if i%4==0 and(i%400==0 or i%100!=0)]
print("leap years",list)
