s=input("enter a word")
a=[]
for i in s:
    i=int(i)
    if(i%2!=0):
        a.append(i)
print("vowels",a)
