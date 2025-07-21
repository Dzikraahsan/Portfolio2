@app.route('/kirim-ajax', methods=['POST'])
def kirim_email_ajax():
    try:
        data = request.get_json()
        nama = data['nama']
        email_pengirim = data['email']
        pesan = data['message']

        email_tujuan = os.getenv("EMAIL_APP")
        email_password = os.getenv("EMAIL_PASSWORD")

        msg = EmailMessage()
        msg['Subject'] = f'Pesan dari {nama}'
        msg['From'] = email_pengirim
        msg['To'] = email_tujuan
        msg.set_content(pesan)

        with smtplib.SMTP('smtp.gmail.com', 587) as smtp:
            smtp.starttls()
            smtp.login(email_tujuan, email_password)
            smtp.send_message(msg)

        return jsonify({'status': 'success'}), 200  # ✅ Di sini tempatnya

    except Exception as e:
        print(f"Email gagal dikirim (AJAX): {e}")
        return jsonify({'status': 'error', 'message': str(e)}), 500
