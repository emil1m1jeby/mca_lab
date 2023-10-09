s=input("enter a string")
chr=s[0]
s=s.replace(chr,'$')
s=chr+s[1:]
print(s)
