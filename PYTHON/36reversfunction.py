def newname(name):
    for word in name[::-1]:
        print(word,end=" ")

s=input("enter fullname").split()
newname(s)
