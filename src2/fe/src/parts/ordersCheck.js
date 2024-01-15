import React from 'react'


export default function OrdersCheck(props) {
    return(
        <>
            <section id='header' className="w-full py-24 bg-slate-600">
                <div className="max-w-6xl mx-auto">
                    <div className="grid grid-cols-1 md:grid-cols-2 content-center">
                        <div className="grid grid-cols-1 content-center">
                            <h1 className="text-3xl text-white">Cek pesanan Kamu dengan nomor invoice!</h1>
                            <p className="text-gray-200 mt-4">Cek pesanan Kamu sudah siap diambil atau belum? Harap tunggu sesuai dengan estimasi pada invoice. Pastikan cek pesanan Kamu secara berkala.</p>
                        </div>
                    </div>
                </div>
            </section>
        </>
    );
}