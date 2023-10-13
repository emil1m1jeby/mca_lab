a=(input("enter list Word:").split(" "))
a.sort(key=len,reverse=True)
if(len(a[0])==len(a[1])) :
        print("bingo")
else:
        print('lenght of longest word:',len(a[0]))

