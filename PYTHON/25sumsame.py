a=input("enter ist col:")
b=input("enter 2nd col:")
s1=set(map(int,a.split(" ")))
s2=set(map(int,b.split(" ")))
print("they are of same:",sum(s1)==sum(s2))

