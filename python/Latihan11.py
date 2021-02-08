# menampilkan semua bilangan prima pada interval tertentu 
# Ubah nilai lower dan upper untuk hasil yang lain 

#perintah menggunkan variabel
lower = 200 #dibawah
upper = 300 #diatas

print("Bilangan prima antara",lower,"and",upper,":") 
for num in range(lower,upper + 1): 
    if num > 1: 
        for i in range(2,num): 
            if (num % i) == 0: 
                break 
        else: 
            print(num) 

#perintah menggunakan input bilngan
bil1 = input('musukkan bilangan batas bawah: ')
bil2 = input('Masukkan bilang batas atas: ' )

print('Bilngan prima antara', bil1, "dan", bil2, ":")

for i in range(int(bil1), int(bil2) + int(1)):
    if i > 1:
        for a in range(2, i):
            if (i % a) == 0:
                break
            else:
                print(i)
