from flask import Flask, request, redirect, render_template, url_for
import smtplib
from email.message import EmailMessage

app = Flask(__name__)

# ⬇️ Route untuk halaman utama (index.html)
@app.route('/')
def home():
    return render_template('index.html')

# ⬇️ Route untuk halaman kontak
@app.route('/kontak')
def kontak():
    return render_template('kontak.html')

# ⬇️ Proses pengiriman email
@app.route('/kirim', methods=['POST'])
def kirim_email():
    nama = request.form['nama']
    email_pengirim = request.form['email']
    pesan = request.form['message']

    email_tujuan = 'ahsandzikra@gmail.com'

    msg = EmailMessage()
    msg['Subject'] = f'Pesan dari {nama}'
    msg['From'] = email_pengirim
    msg['To'] = email_tujuan
    msg.set_content(pesan)

    try:
        with smtplib.SMTP('smtp.gmail.com', 587) as smtp:
            smtp.starttls()
            smtp.login('ahsandzikra@gmail.com', 'ylxu ipxg rkkl dgtm')  # ⛔ Ganti ke ENV nanti ya bro
            smtp.send_message(msg)
        return redirect(url_for('kontak', status='success'))
    except Exception as e:
        return redirect(url_for('kontak', status='error'))

if __name__ == '__main__':
    app.run(debug=True)
