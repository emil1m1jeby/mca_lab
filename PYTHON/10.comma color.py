list=input("enter color repeated eiht comma:")
list=list.split(",")
res=[]
res=[list[i]for i in range(len(list))if i%2!=0]
print("orginal list=")
print(list)
print("resultant list=")
print(res)
