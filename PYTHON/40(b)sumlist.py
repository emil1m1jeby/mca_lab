def total(l):
    if len(l)==1:
        return l[0];
    else:
        return l[0]+total(l[:-1])

l=list(map(int,input("enter a set of number").split()))
print(sum(l))
