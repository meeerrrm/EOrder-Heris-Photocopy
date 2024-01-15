import React from 'react'

import heroImage from "assets/images/wait.png";
import howToOrder from "assets/images/how-to-order.png";

export default function LandingPage(props) {
    return(
        <>
            <section id='header' className="w-full py-24 bg-slate-600">
                <div className="max-w-6xl mx-auto">
                    <div className="grid grid-cols-1 md:grid-cols-2 content-center">
                        <img src={heroImage} alt="Heris Photocopy" className='h-72 mx-auto' />
                        <div className="grid grid-cols-1 content-center">
                            <h1 className="text-3xl text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repellendus fugit dolore praesentium vel commodi architecto provident aperiam minima et. Quisquam autem amet itaque ut adipisci modi culpa optio rem?</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section id="how-to-order" className="bg-slate-200">
                <div className="max-w-6xl mx-auto py-24">
                    <h2 className="text-center text-2xl font-bold">Alur Pemesanan Fotokopi Heris</h2>
                    <div className="w-full py-12 mt-8 bg-white rounded-lg shadow-lg" id="alurasi-order">
                        <img src={howToOrder} className="max-h-72 mx-auto" alt="Cara order di Fotokopi Heris" />
                    </div>
                    <div className="text-center">
                        <a href="/" className="py-4 bg-slate-600 inline-block mt-4 px-12 text-white rounded-lg">Order Sekarang!</a>
                    </div>
                </div>
            </section>
            <section id="pelayanan-kami">
                <div className="max-w-6xl mx-auto py-24">
                    <h2 className="text-center text-2xl font-bold">Pelayanan Kami</h2>
                    <div className="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div className="shadow-lg p-8 rounded-lg border-2 text-center">
                            <h3 className="text-xl font-bold">Jam Operasional</h3>
                            <table className="w-full mt-4">
                                <tr>
                                    <td className="p-2">Senin</td>
                                    <td className="font-bold p-2">08:00 - 17:00 WIB</td>
                                </tr>
                                <tr>
                                    <td className="p-2">Selasa</td>
                                    <td className="font-bold p-2">08:00 - 17:00 WIB</td>
                                </tr>
                                <tr>
                                    <td className="p-2">Rabu</td>
                                    <td className="font-bold p-2">08:00 - 17:00 WIB</td>
                                </tr>
                                <tr>
                                    <td className="p-2">Kamis</td>
                                    <td className="font-bold p-2">08:00 - 17:00 WIB</td>
                                </tr>
                                <tr>
                                    <td className="p-2">Jumat</td>
                                    <td className="font-bold p-2">08:00 - 17:00 WIB</td>
                                </tr>
                                <tr>
                                    <td className="p-2">Sabtu</td>
                                    <td className="font-bold p-2">08:00 - 17:00 WIB</td>
                                </tr>
                                <tr>
                                    <td className="p-2">Minggu</td>
                                    <td className="font-bold p-2 text-red-600">Libur</td>
                                </tr>
                            </table>
                        </div>
                        <div className="shadow-lg p-8 rounded-lg border-2 text-center">
                            <h3 className="text-xl font-bold">Estimasi Pengerjaan</h3>
                            <p className="mt-4">Estimasi Pengerjaan dapat sesuai dengan tingkat kesulitas customer. Anda dapat melihat dengan detail perkiraan selesai pengerjaan pada laman order!</p>
                        </div>
                        <div className="shadow-lg p-8 rounded-lg border-2 text-center">
                            <h3 className="text-xl font-bold">Estimasi Pengerjaan</h3>
                            <p className="mt-4">Estimasi Pengerjaan dapat sesuai dengan tingkat kesulitas customer. Anda dapat melihat dengan detail perkiraan selesai pengerjaan pada laman order!</p>
                        </div>
                    </div>
                </div>
            </section>
        </>
    );
}