# Kombinasi menerima argumen list
# kombinasi dengan panjang tertentu
from itertools import combinations

# Mendapatkan semua kombinasi dari [1, 2, 3]
# dengan panjang 2
comb = combinations([1, 2, 3], 2)

# Print semua kombinasi
for i in comb:
    print(i)

# Kombinasi default sesuai dengan urutannya
# dari input yang tidak berurut

# Mendapatkan kombinasi dari [2, 1, 3]
# dan panjang 2
comb = combinations([2, 1, 3], 2)

# Menampilkan kombinasi
for i in comb:
    print(i)

# Kombinasi kondisi elemen di perlakukan unik sesuai posisi
# dengan elemen yang sama

# Mendapatkan kombinasi dari [1, 1, 3]
# dan panjang 2
comb = combinations([1, 1, 3], 2)

# Menampilkan kombinasi
for i in comb:
    print(i)


# Kombinasi menampilkan elemen yang sama
# dengan mengizinkan kombinasi anggota yang sama 
from itertools import combinations_with_replacement 

# Mendapatkan kombinasi dari [1, 1, 3] 
# dan panjang 2 
comb = combinations_with_replacement([1, 2, 3], 2) 

# Menampilkan kombinasi 
for i in comb: 
    print(i) 