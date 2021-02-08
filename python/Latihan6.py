#Mengecek Bilanga Prima atau tidak
#Input bilngan
bil = int(input('Masukkan Bilangan: '))

#bilangan prima harus lebih besar dari 1
if bil > 1:
    for i in range(2, bil):
        if (bil % i) == 0:
            print(bil, "Bukan Bilangan Prima")
            print(i, "Kali", bil//i, "=", bil)
            break
        else:
            print(bil, "adalah bilangan prima")

#jika bilangan kurang atau sama dengan 1
else:
    print(bil, "bukan bilangan prima")