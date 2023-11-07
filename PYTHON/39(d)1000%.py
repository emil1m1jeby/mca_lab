n=list(map(int,input("enter a set numbers").split()))
increa=print(list(map(lambda x:x+x*0.1 if x>1000 else x+x*0.5,n)))

