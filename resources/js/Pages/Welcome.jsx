import React from 'react';
import { Link, Head } from '@inertiajs/inertia-react';

export default function Welcome(props) {
    return (
        <>
            {/* Title */}
            <Head title="Welcome" />
            <div>
                {/* Body  */}
                <div className="mt-20 relative flex items-center justify-center">
                    <svg
                            width="200"
                            height="200"
                            viewBox="0 0 300 300"
                            fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                            <path d="M135.314 137.655C106.314 118.155 130.815 93.1546 167.315 91.6546C203.815 90.1546 191.315 116.155 203.815 134.655C216.315 153.155 277.814 135.155 239.314 57.6545C200.814 -19.8455 49.8145 31.1545 61.3144 105.655C72.8143 180.155 134.815 153.655 172.815 190.155C210.815 226.655 111.315 253.155 104.314 205.155C97.3144 157.155 30.8143 181.655 53.8144 237.655C76.8146 293.655 252.815 300.155 248.815 234.155C244.815 168.155 164.314 157.155 135.314 137.655Z" fill="#99DAFF" stroke="black" strokeWidth="6" />
                    </svg>
                    <div>
                        <h1 className='text-3xl font-bold '>Welcome!</h1>
                        <div className='mt-4 mb-8'>
                            This is a website where you can check stats for individual players, teams and matches.
                        </div>
                        <Link href={route('login')} className="text-lg px-5 py-2 text-white rounded-lg bg-black">
                            Log in
                        </Link>

                        <Link
                            href={route('register')}
                            className="text-lg px-5 py-2 text-white rounded-lg bg-black ml-5"
                        >
                            Register
                        </Link>
                    </div>
                </div>
            </div>
        </>
    );
}
