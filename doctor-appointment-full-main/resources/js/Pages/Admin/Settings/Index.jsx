import InputField from "@/Components/Form/InputField";
import MainLayout from "@/Layouts/MainLayout";
import { useForm } from "@inertiajs/react";

const Index = ({ setting_info }) => {
    // Initialize form state with `useForm`
    const { data, setData, post, put, errors, processing } = useForm({
        ...setting_info
    });

    // Handle input changes correctly
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setData(name, type === "checkbox" ? checked : value);
    };

    // Handle form submission
    const handleSubmit = (e) => {
        e.preventDefault();
        post("/settings/update"); // Adjust the URL to match your backend route
    };

    return (
        <MainLayout>
            <h2 className="text-2xl font-bold">General Settings</h2>

            <div>
                <form onSubmit={handleSubmit} className="max-w-2xl  mx-auto grid grid-cols-2 gap-4">
                    <InputField label="Website Name" name="website_name" value={data.website_name || ""} onChange={handleChange} placeholder="Enter website name" />
                    <InputField label="Website URL" name="website_url" type="url" value={data.website_url || ""} onChange={handleChange} placeholder="https://example.com" />
                    <InputField label="Author" name="author" value={data.author || ""} onChange={handleChange} placeholder="Enter author name" />
                    <InputField label="Address" name="address" value={data.address || ""} onChange={handleChange} placeholder="Enter address" />
                    <InputField label="Contact Number" name="contact_number" type="tel" value={data.contact_number || ""} onChange={handleChange} placeholder="Enter contact number" />
                    <InputField label="Contact Email" name="contact_email" type="email" value={data.contact_email || ""} onChange={handleChange} placeholder="Enter email" />
                    <InputField label="Site Logo URL" name="site_logo" type="url" value={data.site_logo || ""} onChange={handleChange} placeholder="Enter logo URL" />
                    <InputField label="Facebook Link" name="social_link_fb" type="url" value={data.social_link_fb || ""} onChange={handleChange} placeholder="Enter Facebook link" />
                    <InputField label="YouTube Link" name="social_link_youtube" type="url" value={data.social_link_youtube || ""} onChange={handleChange} placeholder="Enter YouTube link" />

                    <button
                        type="submit"
                        disabled={processing}
                        className="col-span-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        {processing ? "Saving..." : "Update"}
                    </button>
                </form>
            </div>
        </MainLayout>
    );
};

export default Index;
