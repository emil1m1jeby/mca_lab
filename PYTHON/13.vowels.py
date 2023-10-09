s=input("enter a word")
a=[]
for i in s:
    if(i in 'aeiou' ):
        a.append(i)
print("vowels",a)
