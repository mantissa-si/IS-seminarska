import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import InputError from "@/Components/InputError";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm, Head } from "@inertiajs/inertia-react";

export default function Create({ auth }) {
    const { data, setData, post, processing, reset, errors } = useForm({
        name: "",
        surname: "",
        number: "",
        nationality: "",
        team: "",
    });

    const submit = (e) => {
        e.preventDefault();
        post(route("player.store"), { onSuccess: () => reset() });
    };

    return (
        <AuthenticatedLayout auth={auth}>
            <Head title="Player" />

            <div className="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <form onSubmit={submit}>
                    <input
                        value={data.name}
                        placeholder="Name"
                        className="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mb-2 p-2"
                        onChange={(e) => setData("name", e.target.value)}
                    ></input>
                    <input
                        value={data.surname}
                        placeholder="Surname"
                        className="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm p-2"
                        onChange={(e) => setData("surname", e.target.value)}
                    ></input>
                    <input
                        value={data.number}
                        placeholder="Number"
                        className="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm p-2"
                        onChange={(e) => setData("number", e.target.value)}
                    ></input>
                    <input
                        value={data.nationality}
                        placeholder="Nationality"
                        className="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm p-2"
                        onChange={(e) => setData("nationality", e.target.value)}
                    ></input>
                    <input
                        value={data.team}
                        placeholder="Team"
                        className="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm p-2"
                        onChange={(e) => setData("team", e.target.value)}
                    ></input>
                    <InputError message={errors.message} className="mt-2" />
                    <PrimaryButton className="mt-4" processing={processing}>Create</PrimaryButton>
                </form>
            </div>
        </AuthenticatedLayout>
    );
}
