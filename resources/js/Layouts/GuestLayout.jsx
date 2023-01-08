import React from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/inertia-react';

export default function Guest({ children }) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center pt-6 sm:pt-0 bg-no-repeat bg-contain bg-right md:bg-[url('/public/test.svg')]">

            <div className="w-full sm:max-w-md mt-6 mx-[10vw] px-6 py-4 overflow-hidden sm:rounded-lg">
                {children}
            </div>
        </div>
    );
}