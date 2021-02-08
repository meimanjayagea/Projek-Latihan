# Menjumlahkan 2 bilangan
#membuat input bilangan1 dan 2
bil1 = input('Masukkan Bilang Pertama: ')
bil2 = input('masukkan Bilang Kedua: ')

#Menjumlahkan bilangan
jumlah1 = bil1 + bil2 #tipe data String
jumlah2 = float(bil1) + float(bil2) # tipe data float
jumlah3 = int(bil1) + int(bil2) # tipe data integer


#Menampilkan Jumlah
print('Jumlah {0} + {1} adalah {2}'.format(bil1, bil2, jumlah1)) #menampilkan string
print('Jumlah {0} + {1} adalah {2}'.format(bil1, bil2, jumlah2)) #menampilkan float
print('Jumlah {0} + {1} adalah {2}'.format(bil1, bil1, jumlah3)) #menampilkan integer