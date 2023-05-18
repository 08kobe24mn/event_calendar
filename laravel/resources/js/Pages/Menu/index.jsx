import { Header } from "@/Components/Header";

export default function Index(props) {
    const { user } = props;

    return (
        <Header user={user}></Header>
    )
}