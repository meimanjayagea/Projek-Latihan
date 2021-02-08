#mengirim pesan dengan email
import smtplib #import smrplib
from email.mime.multipart import MIMEMultipart #import MIMEMUltipart dari email.mime.multipart
from email.mime.text import MIMEText #import MIMEText dari email.mime.text

#membuat form alamat
fromaddr = "ALAMAT EMAIL PENGIRIM"
#membuat form to 
toaddr = "ALAMAT EMAIL PENERIMA"
#pesan
msg = MIMEMultipart()
msg['From'] = fromaddr
msg['To'] = toaddr
msg['Subject'] = "JUDUL PESAN"

#isi pesan
body = "ISI PESAN"
msg.attach(MIMEText(body, 'plain'))

server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()
server.login(fromaddr, "PASSWORD EMAIL PENGIRIM")
text = msg.as_string()
server.sendmail(fromaddr, toaddr, text)
server.quit()