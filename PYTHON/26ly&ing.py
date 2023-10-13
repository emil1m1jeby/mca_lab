s=input("enter ist word:")
if s.lower().endswith("ing"):
        s+='ly'
else:
        s+='ing'
print(s)
