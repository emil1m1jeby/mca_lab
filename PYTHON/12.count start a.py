n=int(input("Enter the number of names: "))
names= []
for i in range(n):
    name= input("Enter a name: ")
    names.append(name)
letter='a'
result=[i for i in names if name[0].lower() =='a']
print("Number of names starting with 'a':", len(result))
