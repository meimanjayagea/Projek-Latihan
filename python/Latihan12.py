#permutasi
# permutasi menggunakan fungsi dari library python
 
from itertools import permutations 

# Mendapatkan semua permutasi dari [1, 2, 3] 
perm = permutations([1, 2, 3]) 

# Print semua permutasi 
for i in perm: 
    print(i) 


# permutasi dengan panjang ditentukan
from itertools import permutations 

# Mendapatkan semua permutasi dari [1, 2, 3] 
perm = permutations([1, 2, 3],2) 

# Print semua permutasi 
for i in perm: 
    print(i) 

    