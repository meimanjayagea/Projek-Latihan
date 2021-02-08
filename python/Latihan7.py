# Mencari Bilangan Faktor

#mendefinisikan fungsi
def print_faktor(x): 
    """fungsi menerima input bilangan dan mencetak faktornya"""

    print('Faktorisasi dari', x, "adalah: ") #menampilkan parameter
    for i in range(1, x+1): #mengulang variabel i dari 1- nilai input + 1
        if x % i == 0: #kondisi jika parameter modulasi variabel i sama dengan 0
            print(i) #menampilkan i

#input bilangan yang akan di cari faktornya
bil = int(input("masukkan bilangan: ")) #input nilai

print_faktor(bil) #funsi mengambil nilai input bilangan