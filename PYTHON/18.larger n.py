n=int(input("enter the no:of words"))
l=[]
for i in range (n):
    w=input("enter the word")
    l.append(w)
num=int(input("entr the number:"))
result=[i for i in l if len(i)>num]
print("words longer than",num,"are",result)
