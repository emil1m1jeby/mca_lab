num=input("enter the number:")
list=num.split(' ')
new=[]
for i in list:
    n=int(i)
    new.append(n)
l=len(new)
max=new[0]
min=new[0]
for i in range(l):
    if(new[i]<min):
        min=new[i]
    if(new[i]>max):
        max=new[i]
print("the largest number is :",max)
print("the smallest number is :",min)
    
