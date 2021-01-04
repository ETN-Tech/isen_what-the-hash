"""
Demontration of how a Rainbow table works. The objective of this program is to make a demonstration of how to recover a password 
from a hash. In order to make it in a reasonable time we use a reduce version of sha-256 which keep only the 6 first digits  
"""

import hashlib
import sys

def small_sha256(word): #reduce version of sha-256
    temp_hash=hashlib.sha256(word)
    temp_hash=temp_hash.hexdigest() # we have here the complete hash from 
    temp_hash2=''
    for n in range(6):
        temp_hash2+=temp_hash[n]
    return(temp_hash2)

#lets take a hash from a password, then we will suppose we forgot the password and will try to recover it thanks to the rainbow table.
password='9a28' # We take a small password for this example in order to get a limited rainbow table in size.
password=password.encode()
hash_from_pass=hashlib.sha256(password)
hash_from_pass=hash_from_pass.hexdigest()
test=''
for i in range(6):
    test+=hash_from_pass[i]
print('The corresponding hash is',test)
goal=test # hash from our target password
# In order to get a reasonable time of execution we will only keep the 4 first digits.
# we now have our hash, lets begin the creation of the rainbow table
# As reduction function we will keep the last 4 digits of our hash
# We will do the reduction 5 times in our table

rainbow_table=[]
for e in range(100):  # our rainbow table will have 100 chains
     rainbow_table.append([])
     entry=str(e)
     if e<10:
         entry='0'+entry
     rainbow_table[e].append(entry)
     for z in range(6):  # we want to make 5 reductions, this set the length of the chains
        entry=entry.encode()
        new_hash=small_sha256(entry)
        rainbow_table[e].append(new_hash)
        entry=''
        entry+=new_hash[:4]
        if z<5: # we dont want to end our chains with a password but with a hash, we need to cut short the last loop. 
            rainbow_table[e].append(entry)
#print('\nhere is the whole Rainbow table: ')
#print(rainbow_table)

#We know got a complete table with complete chains, but the principle of a rainbow table 
#is that we can now reduce the size by keeping only the first and last digits

for t in range(len(rainbow_table)):
    rainbow_table[t]=[rainbow_table[t][0],rainbow_table[t][len(rainbow_table[t])-1]]
#print('\nhere is the reduce rainbow table we will keep in storage: ')
#print(rainbow_table)

# Now we just have to look for our hash, if it is not in the list, we apply the redution function
# until we find one which is in our list.
found=0 # allows to leave the while loop if we have found the hash
temp_goal=goal
counter=0 # count the number of reduction made on our initial hash, if it is longer than the chain we can't find the pass in the table.
while (found==0):
    for y in range(len(rainbow_table)):
        if(temp_goal in rainbow_table[y]):
            found=1
            print('\nthe researched hash is in chain',y)
            chain=y
            break
    else:
        entry=temp_goal[0]+temp_goal[1]+temp_goal[2]+temp_goal[3]
        entry=entry.encode()
        temp_goal=small_sha256(entry)
    if counter>=6:
        print("the password has not been found in the rainbow table, try with a bigger table or an other password.")
        sys.exit()
    counter+=1

# After this loop we know in which chain is our hash, we just have to rebuilt the chain and get the password

entry=rainbow_table[chain][0]
final_chain=[entry] # we regenerate the chain where we now our password is.
for u in range(6):
        entry=entry.encode()
        temp_hash=small_sha256(entry)
        final_chain.append(temp_hash)
        entry=''
        entry+=temp_hash[:4]
        if u<5:
            final_chain.append(entry)
for h in range(len(final_chain)): # we we find the corresponding hash, we keep the list index in memory. 
    if final_chain[h]==goal:
        indice=h
print('The password corresponding to %s is %s' %(goal,final_chain[indice-1]))
    


