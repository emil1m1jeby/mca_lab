try:
    f=open("FILES.txt","r+")
    f.seek(0,0)
    print(len(f.readlines()))
except :
    print("error")
finally:
    f.close()
