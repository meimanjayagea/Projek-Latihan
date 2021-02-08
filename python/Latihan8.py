#persamaan kuadrat ax2 + bx + c = 0

#inport module matematika math
import math

#input koefisien dari keyboard
a = int (input('Masukkan a: '))
b = int (input('Masukkan b: '))
c = int (input('Masukkan c: '))

#hitung diskriminasi d
d = (b**2) - (4*a*c)

#menemukan x1 dan x2
x1 = (-b+math.sqrt(d))/(2*a)
x2 = (-b-math.sqrt(d))/(2*a)

#menampilkan hasil
print('solusinya adalah {0} dan {1}'.format(x1, x2))