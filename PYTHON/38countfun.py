def count(l):
    count=0
    for i in l:
        if (len(i)>1 and i[0]==i[-1]):
            count=count+1
    print("count=",count)
s=input("enter a string").split()
count(s)
