n=input("enter no of string :")
word={}
for i in n.split():
	word[i]=word.get(i,0)+1
print(word)
